<?= 12141514 ?>

<?= 12141514; ?>
<?= "23123jioi1214"; ?>

<p id="<?= CHTML::encode("$value") ?>">Hello, body.</p>

<?php
$pagec = (int)Yii::$app->request->get('page', 1);
?>

<?php
$page = (int)Yii::$app->request->get('page', 1);
$module_id = Yii::$app->request->get('module_id'); // Is error comment
$page = Yii::$app->request->post('page', 1);

echo '你好世界';
echo "你好{$new_value}世界";
echo "你好{世界";
/**
 * "我就用双引号了，嘿~"
 */

$new_value = trim(Yii::app()->request->getParam('new_info'));
$value = Yii::app()->request->getParam('info');
$value = intval(Yii::app()->request->getParam('info'));  // Is success comment

require_once("a.php");
require_once('a.php');
require "a.php";
require_once('a.php');
include("a.php");
include_once ('a.php');

if (preg_match('/\"((?!(\{\$.+\})).)*\"/', $content, $preg))
    return '纯字符串使用双引号';
if(preg_match('/\"((?!(\{\$.+\})).)*\"/', $content, $preg)) {
    return '纯字符串使用双引号';
}
if (preg_match('/\"((?!(\{\$.+\})).)*\"/', $content, $preg)){
    return '纯字符串使用双引号'; // Is error comment
}
if(preg_match('/\"((?!(\{\$.+\})).)*\"/', $content, $preg)){
    return '纯字符串使用双引号';
}
while(preg_match('/\"((?!(\{\$.+\})).)*\"/', $content, $preg)){
    return '纯字符串使用双引号';
}
foreach($argv as $value){
    return '纯字符串使用双引号';
}
function a($i){
    return '纯字符串使用双引号';
}

/**
 * @api {get} /drama/backend/auth/manager{?filter,keyword} 打开授权管理页面
 * @apiExample {curl} Example usage:
 *     curl -i http://{{host}}/drama/backend/auth/manager
 * @apiSampleRequest /drama/backend/auth/manager
 *
 * @apiVersion 0.1.0
 * @apiName manager
 * @apiGroup auth
 *
 * @apiParam (Query) {Int} filter 筛选字段（0：全选；1：ID；2：用户名）
 * @apiParam (Query) {boolean=true,false} filter 筛选字段（0：全选；1：ID；2：用户名）
 * @apiParam (Query) {Boolean=true,false} filter 筛选字段（0：全选；1：ID；2：用户名）
 * @apiParam (Query) {boolean} filter 筛选字段（0：全选；1：ID；2：用户名）
 * @apiParam (Query) {Number} filter 筛选字段（0：全选；1：ID；2：用户名）
 * @apiParam (Query) {Bool} filter 筛选字段（0：全选；1：ID；2：用户名）
 * @apiParam (Query) {String} keyword 关键字
 * (Query) {QString} keyword 关键字
 *
 * @apiSuccess {String} HTML document.
 */

try {
    // some code.
} catch (Exception $e) {
    // throw code.
}

$uioName = 'BIBIBI';
$uio_name = 'BIBIBI';

// ((?!(\{$\w\})).)*
//((?!(\{$\w\})).)*
// TODO:((?!(\{$\w\})).)*
// todo: (aedo2ihe1)
//todo:((?!(\{$\w\})).)*
