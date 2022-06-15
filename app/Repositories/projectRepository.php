<?php

namespace App\Repositories;

use App\Models\project;
use App\Repositories\BaseRepository;

/**
 * Class projectRepository
 * @package App\Repositories
 * @version June 15, 2022, 1:05 am UTC
*/

class projectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'buy',
        'duration',
        'participant'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return project::class;
    }
}
