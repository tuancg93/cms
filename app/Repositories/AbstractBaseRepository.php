<?php
/**
 * Created by PhpStorm.
 * User: anhdv
 * Date: 5/9/2018
 * Time: 9:27 AM
 */

namespace App\Repositories;

use App\Exceptions\RepositoryException;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

/**
 * Class AbstractBaseRepository
 * @package App\Repositories
 */
abstract class AbstractBaseRepository implements RepositoryInterface
{
    protected $model;
    protected $query;
    /**
     * @var array $data
     * query parameters (sort, filters, pagination)
     */
    protected $data;
    protected $columns = ['*'];
    protected $orderBy;
    protected $sortMethod = 'DESC';
    protected $limit = 10;
    protected $offset = 0;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->orderBy = $model->getKeyName();
    }

    public function makeBaseModel(BaseModel $model)
    {
        $this->model = $model;
    }

    /**
     * array column to get data
     *
     * @param array $columns
     * @return $this
     * @throws RepositoryException
     */
    public function columns(array $columns = ['*'])
    {
        if (is_array($columns) === false) {
            throw new RepositoryException('');
        }
        $this->columns = $columns;
        return $this;
    }

    /**
     * set limit
     *
     * @param int $limit
     * @return $this
     * @throws RepositoryException
     */
    public function limit($limit = 10)
    {
        if (!is_numeric($limit) || $limit < 1) {
            throw new RepositoryException('Limit Must be greater than 1');
        }
        $this->limit = $limit;
        return $this;
    }

    /**
     * set offset
     *
     * @param int $offset
     * @return $this
     * @throws RepositoryException
     */
    public function offset($offset = 0)
    {
        if (!is_numeric($offset) || $offset < 0) {
            throw new RepositoryException('Offset must be grater than or equal to ZERO');
        }
        $this->offset = $offset;
        return $this;
    }

    /**
     * set order-by
     *
     * @param $orderBy
     * @param string $sort
     * @return $this
     * @throws RepositoryException
     */
    public function orderBy($orderBy = null, $sort = 'DESC')
    {
        if ($orderBy === null) {
            return $this;
        }
        $this->orderBy = $orderBy;
        if (!in_array(strtoupper($sort), ['DESC', 'ASC'])) {
            throw new RepositoryException('');
        }
        $this->sortMethod = $sort;
        return $this;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findOneById($id)
    {
        return $this->model
            ->findOrFail($id, $this->columns);
    }

    /**
     * @param array $ids
     * @return mixed
     */
    public function findManyByIds(array $ids)
    {
        return $this->model
            ->whereIn($this->model->getKeyName(), $ids)
            ->take($this->limit)
            ->skip($this->offset)
            ->get($this->columns);
    }

    /**
     * @param $key
     * @param $value
     * @return mixed
     */
    public function findOneBy($key, $value)
    {

        return $this->model
            ->where($key, '=', $value)
            ->firstOrFail($this->columns);
    }

    /**
     * @param $key
     * @param $value
     * @return mixed
     */
    public function findOneByNotRaiseException($key, $value)
    {
        return $this->model
            ->where($key, '=', $value)
            ->first($this->columns);
    }

    /**
     * @param $key
     * @param $value
     * @return Collection
     */
    public function findManyBy($key, $value)
    {
        return $this->model
            ->where($key, '=', $value)
            ->orderBy($this->orderBy, $this->sortMethod)
            ->take($this->limit)
            ->skip($this->offset)
            ->get($this->columns);
    }

    /**
     * @return Collection
     */
    public function findAll()
    {
        return $this->model
            ->orderBy($this->orderBy, $this->sortMethod)
            ->get($this->columns);
    }

    /**
     * @return Collection
     */
    public function findMany()
    {
        return $this->model
            ->orderBy($this->orderBy, $this->sortMethod)
            ->take($this->limit)
            ->skip($this->offset)
            ->get($this->columns);
    }

    /**
     * @param $key
     * @param $value
     * @param int $perPage
     * @return mixed
     */
    public function paginateBy($key, $value, $perPage = 10)
    {
        return $this->model
            ->where($key, '=', $value)
            ->orderBy($this->orderBy, $this->sortMethod)
            ->paginate($perPage, $this->columns);
    }

    /**
     * @param int $perPage
     * @return mixed
     */
    public function paginate($perPage = 10)
    {
        return $this->model
            ->orderBy($this->orderBy, $this->sortMethod)
            ->paginate($perPage, $this->columns);
    }

    /**
     * @param $id
     * @param array $data
     * @return bool
     * @throws RepositoryException
     */
    public function updateOneById($id, array $data = [])
    {
        if (!is_array($data) || empty($data)) {
            throw new RepositoryException;
        }
        return $this->model
            ->findOrFail($id)
            ->update($data);


    }

    /**
     * @param $key
     * @param $value
     * @param array $data
     * @return bool
     * @throws RepositoryException
     */
    public function updateOneBy($key, $value, array $data = [])
    {
        if (is_array($data) || empty($data)) {
            throw new RepositoryException;
        }
        return $this->model
            ->where($key, '=', $value)
            ->firstOrFail()
            ->update($data);
    }

    /**
     * @param $key
     * @param $value
     * @param array $data
     * @return bool
     * @throws RepositoryException
     */
    public function updateManyBy($key, $value, array $data = [])
    {
        if (is_array($data) || empty($data)) {
            throw new RepositoryException;
        }
        return $this->model
            ->where($key, $value)
            ->take($this->limit)
            ->skip($this->offset)
            ->update($data);
    }

    /**
     * @param array $ids
     * @param array $data
     * @return bool
     * @throws RepositoryException
     */
    public function updateManyByIds(array $ids, array $data = [])
    {
        if (!is_array($data) || empty($data)) {
            throw new RepositoryException;
        }
        //dd($ids, $this->model->whereIn('id', $ids), $data);
        return $this->model
            ->whereIn('id', $ids)
            ->update($data);
    }

    /**
     * @param array $ids
     * @return bool
     */
    public function allExist(array $ids)
    {
        return (count($ids) == $this->model->whereIn('id', $ids)->count());
    }

    /**
     * @param array $credentials
     * @param array $data
     * @return mixed
     */

    /**
     * @param $id
     * @return boolean
     */
    public function deleteOneById($id)
    {
        return $this->model
            ->findOrFail($id)
            ->delete();
    }

    /**
     * @param $key
     * @param $value
     * @return boolean
     */
    public function deleteOneBy($key, $value)
    {
        return $this->model
            ->where($key, '=', $value)
            ->firstOrFail()
            ->delete();
    }

    /**
     * @param $key
     * @param $value
     * @return boolean
     */
    public function deleteManyBy($key, $value)
    {
        return $this->model
            ->where($key, $value)
            ->take($this->limit)
            ->skip($this->offset)
            ->delete();
    }

    /**
     * @return mixed
     */
    public function deleteMany()
    {
        return $this->model
            ->take($this->limit)
            ->delete();
    }

    /**
     * @param array $ids
     * @return mixed
     */
    public function deleteManyByIds(array $ids)
    {
        return $this->model
            ->whereIn('id', $ids)
            ->delete();
    }

    /**
     * @return bool|null
     * @throws \Exception
     */
    public function deleteAll()
    {
        return $this->model
            ->delete();
    }

    public function explodeStringToArray($input)
    {
        foreach ($input as $key => $item) {
            if (strlen($item) > 0) {
                $data[$key] = explode('|', $item);
            }
        }
        return $data;
    }

    function executeTransaction($func)
    {
        DB::beginTransaction();
        try {
            $func();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
        return true;
    }

    function reduce($array, $key, $value)
    {
        $result = array_reduce($array, function ($result, $item) use ($key, $value) {
            $result[$item[$key]] = $item[$value];
            return $result;
        }, array());
        return $result;
    }

    public function findManyByArray($key, array $value)
    {
        return $this->model
            ->whereIn($key, $value)
            ->orderBy($this->orderBy, $this->sortMethod)
            ->take($this->limit)
            ->skip($this->offset)
            ->get($this->columns);
    }

    /////////////////////////////////////
    //////////// credential query ///////
    /////////////////////////////////////

    /**
     * build credentials query
     * array(
     *   'name'     => 'Super Cool',                    <=> AND name = 'Super Cool'
     *   'type'     => ['1', '>']                       <=> AND type > 1
     *   'type1'    => [['1', '>'], ['5', '<']]         <=> AND 1< type1 < 5
     *   'id'       => [['3', '=', 'OR']]               <=> OR id = 3
     * );
     *
     * @param array $credentials
     * @return \App\Models\BaseModel
     */
    protected function buildCredentialsQuery(array $credentials)
    {
        $results = $this->model;
        if (!empty($credentials)) {
            foreach ($credentials as $key => $_value) {
                $value = $_value;
                $operator = '=';
                if (is_array($_value)) {
                    $value = $_value[0];
                    $operator = isset($_value[1]) ? $_value[1] : $operator;
                    if (is_array($_value[0])) {
                        foreach ($_value as $__value) {
                            $value = $__value[0];
                            $operator = isset($__value[1]) ? $__value[1] : $operator;
                            $hasAndOperator = isset($__value[2]) && (strtolower($__value[2]) != 'and') ? false : true;
                            if ($hasAndOperator) {
                                $results = $results->where($key, $operator, $value);
                            } else {
                                $results = $results->OrWhere($key, $operator, $value);
                            }
                        }
                    } else {
                        $results = $results->where($key, $operator, $value);
                    }
                } else {
                    $results = $results->where($key, $operator, $value);
                }
            }
        }
        return $results;
    }

    /**
     * find one record by
     *
     * @param array $credentials
     * @return mixed
     */
    public function findOneByCredentials(array $credentials)
    {
        return $this->buildCredentialsQuery($credentials)
            ->orderBy($this->orderBy, $this->sortMethod)
            ->first($this->columns);
    }
    public function findManyByCredentials(array $credentials){
        return $this->buildCredentialsQuery($credentials)
            ->orderBy($this->orderBy, $this->sortMethod)
            ->get();
    }
}