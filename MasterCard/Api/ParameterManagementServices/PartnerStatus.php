<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\ParameterManagementServices;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class PartnerStatus extends BaseObject {


    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "0cce947d-d806-4d37-8114-0e12a5ff1ae3":
                return new OperationConfig("/send/v1/partners/{partnerId}/partner-status", "query", array(), array());
            case "e5cfa5b7-7cbc-4f19-a845-7c0a099b919c":
                return new OperationConfig("/send/v1/partners/{partnerId}/partner-status", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        return new OperationMetadata(SDKConfig::getVersion(), SDKConfig::getHost());
    }







    /**
     * Query objects of type PartnerStatus by id and optional criteria
     * @param type $criteria
     * @return type
     */
    public static function read($criteria)
    {
        return self::execute("0cce947d-d806-4d37-8114-0e12a5ff1ae3",new PartnerStatus($criteria));
    }

   /**
    * Updates an object of type PartnerStatus
    *
    * @return A PartnerStatus object representing the response.
    */
    public function update()  {
        return self::execute("e5cfa5b7-7cbc-4f19-a845-7c0a099b919c",$this);
    }






}
