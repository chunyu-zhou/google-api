<?php

/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GoogleApi\Service\Analytics;

use GoogleApi\Service\ServiceResource;

class ManagementWebpropertiesServiceResource extends ServiceResource
{
    /**
     * Lists web properties to which the user has access. (webproperties.list)
     *
     * @param string $accountId Account ID for the web properties to retrieve. Can either be a specific account ID or '~all', which refers to all the accounts to which user has access.
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param int max-results The maximum number of entries to include in this response.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return Webproperties
     */
    public function listManagementWebproperties($accountId, $optParams = array())
    {
        $params = array('accountId' => $accountId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Webproperties($data);
        } else {
            return $data;
        }
    }
}
