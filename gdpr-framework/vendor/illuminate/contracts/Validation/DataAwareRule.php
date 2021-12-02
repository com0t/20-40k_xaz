<?php

namespace Data443\gdpr\framework\Illuminate\Contracts\Validation;

interface DataAwareRule
{
    /**
     * Set the data under validation.
     *
     * @param  array  $data
     * @return $this
     */
    public function setData($data);
}
