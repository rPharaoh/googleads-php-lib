<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createBaseRatesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201802\BaseRate[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201802\BaseRate[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\BaseRate[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\BaseRate[] $rval
     * @return \Google\AdsApi\AdManager\v201802\createBaseRatesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
