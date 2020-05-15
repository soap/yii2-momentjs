<?php
/**
 * @link https://github.com/MadAnd/yii2-momentjs
 * @copyright Copyright (c) 2015 Andriy Kmit' <dev@madand.net>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace madand\momentjs;

use yii\web\AssetBundle;

/**
 * Class MomentJsAsset includes core MomentJs with no locale data.
 *
 * @package madand\momentjs
 * @author Andriy Kmit' <dev@madand.net>
 */
class MomentJsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower-asset/moment/min';
    public $js = [
        'moment.min.js',
    ];
}
