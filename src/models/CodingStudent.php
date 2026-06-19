<?php

namespace Dorguzen\Models;

use Dorguzen\Config\Config;
use Dorguzen\Core\DGZ_Model;

class CodingStudent extends DGZ_Model
{
    protected $table = 'coding_students';
    protected $id    = 'coding_student_id';

    protected $_columns = [];
    protected $data     = [];
    protected $_hasParent = [];
    protected $_hasChild  = [];

    public function __construct(Config $config)
    {
        parent::__construct($config);
    }
}
