<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class BackendController extends Controller
{
    public function isAdmin()
    {
        if (\Yii::$app->user->can('_admin')) {
            return true;
        }
        return false;
    }

    public function buildTree($data)
    {
        $tree = [];
        $dash = '---';
        foreach ($data as $node) {
            $tree[$node->id] = str_pad($node->title, strlen($node->title)
            +strlen($dash)*$node->depth, $dash, STR_PAD_LEFT);
        }
        return $tree;
    }

    public static function slug($data, $title = 'title', $slug = 'slug')
    {
        if (!empty($data[$slug])) {
            return BackendController::stripUnicode($data[$slug]);
        } else {
            return BackendController::stripUnicode($data[$title]);
        }
    }

    private static function stripUnicode($string)
    {
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
            'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach ($unicode as $nonUnicode => $uni) {
            $string = preg_replace("/($uni)/i", $nonUnicode, $string);
        }
        return strtolower($string);
    }
}
