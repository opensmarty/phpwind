<?php

defined('WEKIT_VERSION') || exit('Forbidden');

/**
 * ��ȡ����������
 *
 * @author $Author$ Foxsee@aliyun.com
 * @copyright ?2003-2103 phpwind.com
 * @license http://www.phpwind.com
 *
 * @version $Id$
 */
class PwGetFreshByIds implements iPwDataSource
{
    public $ids = [];

    public function __construct($ids)
    {
        $this->ids = $ids;
    }

    public function getData()
    {
        return Wekit::load('attention.PwFresh')->fetchFresh($this->ids);
    }
}