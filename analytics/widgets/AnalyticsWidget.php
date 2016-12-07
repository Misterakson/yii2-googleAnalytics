<?php

namespace misterakson\analytics\widgets;

use Yii;
use yii\base\Exception;
use yii\base\Widget;


/**
 * Class AnalyticsWidget
 * @package backend\modules\analytics\widgets
 * @property integer static $counter
 * @property string $source
 * @property string $userId
 * @property integer $maxResults
 * @property static array $dimensions
 */
class AnalyticsWidget extends Widget
{
    public static $counter;
    public $source; // обозначение виджета
    public $userId;
    public $maxResults = 0;
    private static $dimensions = null;

    /**
     * Initialize Widget
     */
    public function init()
    {
        self::initDimentions();
        $this->validate();
        self::$counter++;
    }

    /**
     * @return string
     * Vidget render view
     */
    public function run()
    {
        return $this->render('widget_content',
            [
                'userId' => $this->userId,
                'maxResults' => $this->maxResults,
                'counter' => self::$counter,
                'dimension' => self::$dimensions[$this->source]
            ]);
    }


    /**
     * Initialize Array dimensions
     */
    public static function initDimentions()
    {
        if(self::$dimensions === null){
            self::$dimensions = [
                'reference' => 'ga:source',
                'demography'=> 'ga:userGender',
                'geography' => 'ga:city'
            ];
        }
    }


    /**
     * @return bool
     * @throws Exception
     * Data validator
     */
    public function validate(){
        if(array_key_exists($this->source,self::$dimensions)){
            return true;
        } else {
            throw new Exception('Error source initialize');
        }
    }




}
