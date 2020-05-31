<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Entity;

use amillot\SurveyBundle\Traits\QuestionListAware;

class Survey extends AbstractSurvey
{
    use QuestionListAware {
        QuestionListAware::__construct as private __questionListAwareConstruct;
    }

    public function __construct()
    {
        parent::__construct();
        $this->__questionListAwareConstruct();
    }
}
