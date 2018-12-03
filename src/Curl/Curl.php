<?php
namespace Oliver\Curl;

use Oliver\Curl\CurlInterface;

/**
 *
 */
class Curl implements CurlInterface
{

    public function fetchData(array $urls) : array
    {
        $curlHandles = [];
        $multiHandle = curl_multi_init();

        for ($i=0; $i < count($urls); $i++) {
            $curlHandles[$i] = curl_init($urls[$i]);
            curl_setopt($curlHandles[$i], CURLOPT_RETURNTRANSFER, true);
            curl_multi_add_handle($multiHandle, $curlHandles[$i]);
        }

        $running = null;
        do {
            curl_multi_exec($multiHandle, $running);
        } while ($running);

        $results = [];
        for ($i=0; $i < count($curlHandles); $i++) {
            $results[] = (json_decode(curl_multi_getcontent($curlHandles[$i]), true));
        }
        return $results;
    }
}
