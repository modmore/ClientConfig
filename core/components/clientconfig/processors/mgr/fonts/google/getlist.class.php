<?php
/**
 * Gets a list of cgGroup objects.
 */
class cgGoogleFontListGetListProcessor extends modObjectGetListProcessor {
    public $languageTopics = array('clientconfig:default');

    /**
     * {@inheritDoc}
     * @return mixed
     */
    public function process() {
        $apiKey = $this->modx->getOption('clientconfig.google_fonts_api_key', null, '');
        if (empty($apiKey)) {
            return $this->outputArray(array(), 0);
        }
        $apiEndpoint = "https://www.googleapis.com/webfonts/v1/webfonts?key={$apiKey}&sort=alpha";
        $json = $this->modx->fromJson($this->curlGet($apiEndpoint));
        $fonts = $json['items'];
        $total = count($fonts);
        $list = array();

        foreach ($fonts as $font) {
            $item = array();
            $item['family'] = str_replace(' ','+',$font['family']);
            $item['name'] = $font['family'];
            $list[] = $item;
        }

        return $this->outputArray($list,$total);
    }

    /**
     * Gets data from a remote url using cURL
     *
     * @param $url
     * @return mixed
     */
    protected function curlGet($url) {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $results = curl_exec($curl);
        curl_close($curl);

        return $results;
    }
}
return 'cgGoogleFontListGetListProcessor';
