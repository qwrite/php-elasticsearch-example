<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Namespaces;

use Elasticsearch\Namespaces\AbstractNamespace;

/**
 * Class WatcherNamespace
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 7.16.0 (6fc81662312141fe7691d7c1c91b8658ac17aa0d)
 */
class WatcherNamespace extends AbstractNamespace
{

    /**
     * Acknowledges a watch, manually throttling the execution of the watch's actions.
     *
     * $params['watch_id']  = (string) Watch ID (Required)
     * $params['action_id'] = (list) A comma-separated list of the action ids to be acked
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/watcher-api-ack-watch.html
     */
    public function ackWatch(array $params = [])
    {
        $watch_id = $this->extractArgument($params, 'watch_id');
        $action_id = $this->extractArgument($params, 'action_id');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Watcher\AckWatch');
        $endpoint->setParams($params);
        $endpoint->setWatchId($watch_id);
        $endpoint->setActionId($action_id);

        return $this->performRequest($endpoint);
    }
    /**
     * Activates a currently inactive watch.
     *
     * $params['watch_id'] = (string) Watch ID
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/watcher-api-activate-watch.html
     */
    public function activateWatch(array $params = [])
    {
        $watch_id = $this->extractArgument($params, 'watch_id');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Watcher\ActivateWatch');
        $endpoint->setParams($params);
        $endpoint->setWatchId($watch_id);

        return $this->performRequest($endpoint);
    }
    /**
     * Deactivates a currently active watch.
     *
     * $params['watch_id'] = (string) Watch ID
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/watcher-api-deactivate-watch.html
     */
    public function deactivateWatch(array $params = [])
    {
        $watch_id = $this->extractArgument($params, 'watch_id');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Watcher\DeactivateWatch');
        $endpoint->setParams($params);
        $endpoint->setWatchId($watch_id);

        return $this->performRequest($endpoint);
    }
    /**
     * Removes a watch from Watcher.
     *
     * $params['id'] = (string) Watch ID
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/watcher-api-delete-watch.html
     */
    public function deleteWatch(array $params = [])
    {
        $id = $this->extractArgument($params, 'id');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Watcher\DeleteWatch');
        $endpoint->setParams($params);
        $endpoint->setId($id);

        return $this->performRequest($endpoint);
    }
    /**
     * Forces the execution of a stored watch.
     *
     * $params['id']    = (string) Watch ID
     * $params['debug'] = (boolean) indicates whether the watch should execute in debug mode
     * $params['body']  = (array) Execution control
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/watcher-api-execute-watch.html
     */
    public function executeWatch(array $params = [])
    {
        $id = $this->extractArgument($params, 'id');
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Watcher\ExecuteWatch');
        $endpoint->setParams($params);
        $endpoint->setId($id);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * Retrieves a watch by its ID.
     *
     * $params['id'] = (string) Watch ID
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/watcher-api-get-watch.html
     */
    public function getWatch(array $params = [])
    {
        $id = $this->extractArgument($params, 'id');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Watcher\GetWatch');
        $endpoint->setParams($params);
        $endpoint->setId($id);

        return $this->performRequest($endpoint);
    }
    /**
     * Creates a new watch, or updates an existing one.
     *
     * $params['id']              = (string) Watch ID
     * $params['active']          = (boolean) Specify whether the watch is in/active by default
     * $params['version']         = (number) Explicit version number for concurrency control
     * $params['if_seq_no']       = (number) only update the watch if the last operation that has changed the watch has the specified sequence number
     * $params['if_primary_term'] = (number) only update the watch if the last operation that has changed the watch has the specified primary term
     * $params['body']            = (array) The watch
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/watcher-api-put-watch.html
     */
    public function putWatch(array $params = [])
    {
        $id = $this->extractArgument($params, 'id');
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Watcher\PutWatch');
        $endpoint->setParams($params);
        $endpoint->setId($id);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * Retrieves stored watches.
     *
     * $params['body'] = (array) From, size, query, sort and search_after
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/watcher-api-query-watches.html
     */
    public function queryWatches(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Watcher\QueryWatches');
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
    /**
     * Starts Watcher if it is not already running.
     *
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/watcher-api-start.html
     */
    public function start(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Watcher\Start');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * Retrieves the current Watcher metrics.
     *
     * $params['metric']           = (list) Controls what additional stat metrics should be include in the response
     * $params['emit_stacktraces'] = (boolean) Emits stack traces of currently running watches
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/watcher-api-stats.html
     */
    public function stats(array $params = [])
    {
        $metric = $this->extractArgument($params, 'metric');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Watcher\Stats');
        $endpoint->setParams($params);
        $endpoint->setMetric($metric);

        return $this->performRequest($endpoint);
    }
    /**
     * Stops Watcher if it is running.
     *
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/watcher-api-stop.html
     */
    public function stop(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Watcher\Stop');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
}
