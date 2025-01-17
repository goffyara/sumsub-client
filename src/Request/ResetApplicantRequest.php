<?php

namespace alexeevdv\SumSub\Request;

final class ResetApplicantRequest
{
    /**
     * @var string
     */
    private $applicantId;

    /**
     * @param string $applicantId
     */
    public function __construct($applicantId)
    {
        if ($applicantId === null) {
            throw new \InvalidArgumentException('Applicant ID can not be null.');
        }
        $this->applicantId = $applicantId;
    }

    /**
     * @return string
     */
    public function getApplicantId()
    {
        return $this->applicantId;
    }
}
