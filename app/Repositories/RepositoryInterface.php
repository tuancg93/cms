<?php
/**
 * Created by PhpStorm.
 * User: anhdv
 * Date: 5/9/2018
 * Time: 9:24 AM
 */

namespace App\Repositories;
/**
 * Class RepositoryInterface
 */
interface RepositoryInterface
{
    /**
     * @param array $columns
     * @return $this
     */
    public function columns(array $columns = ['*']);

    /**
     * @param int $limit
     * @return $this
     */
    public function limit($limit = 10);

    /**
     * @param $orderBy
     * @param string $sort
     * @return $this
     */
    public function orderBy($orderBy, $sort = 'DESC');

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param $id
     * @return mixed
     */
    public function findOneById($id);

    /**
     * @param $key
     * @param $value
     * @return mixed
     */
    public function findOneBy($key, $value);

    /**
     * @param $key
     * @param $value
     * @return Collection
     */
    public function findManyBy($key, $value);

    /**
     * @param array $ids
     * @return mixed
     */
    public function findManyByIds(array $ids);

    /**
     * @return Collection
     */
    public function findAll();

    /**
     * @param $key
     * @param $value
     * @param int $perPage
     * @return mixed
     */
    public function paginateBy($key, $value, $perPage = 10);

    /**
     * @param int $perPage
     * @return mixed
     */
    public function paginate($perPage = 10);

    /**
     * @param $id
     * @param array $data
     * @return boolean
     */
    public function updateOneById($id, array $data = []);

    /**
     * @param $key
     * @param $value
     * @param array $data
     * @return boolean
     */
    public function updateOneBy($key, $value, array $data = []);

    /**
     * @param $key
     * @param $value
     * @param array $data
     * @return boolean
     */
    public function updateManyBy($key, $value, array $data = []);

    /**
     * @param array $ids
     * @param array $data
     * @return bool
     */
    public function updateManyByIds(array $ids, array $data = []);

    /**
     * @param $id
     * @return boolean
     */
    public function deleteOneById($id);

    /**
     * @param array $ids
     * @return bool
     */
    public function allExist(array $ids);

    /**
     * @param $key
     * @param $value
     * @return boolean
     */
    public function deleteOneBy($key, $value);

    /**
     * @param $key
     * @param $value
     * @return boolean
     */
    public function deleteManyBy($key, $value);

    /**
     * @param array $credentials
     * @return mixed
     */
    public function findOneByCredentials(array $credentials);

    /**
     * @param array $ids
     * @return mixed
     */
    public function deleteManyByIds(array $ids);
    public function explodeStringToArray($data);

    /**
     * @param $a
     * @return mixed
     */
    function executeTransaction($func);


}