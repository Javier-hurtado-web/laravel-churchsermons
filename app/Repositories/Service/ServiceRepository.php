<?php

namespace App\Repositories\Service;

interface ServiceRepository
{
    public function getAll();

    public function getAllOrderByLatest();

    public function get30Paginated();

    public function getBySlug($slug);

    public function create($request);

    public function update($slug, $request);

    public function delete($slug);

    public function countAll();

    public function increaseSermonCount($id);
}
