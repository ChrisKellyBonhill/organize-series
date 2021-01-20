<?php
namespace OrganizeSeries\domain\model;

use OrganizeSeries\domain\interfaces\AbstractNotice;

class ErrorNotice extends AbstractNotice
{
    protected function getNoticeType()
    {
        return 'error';
    }
}