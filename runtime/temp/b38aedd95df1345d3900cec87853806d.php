<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:70:"/var/www/html/Golden/application/admin/view/ump/store_coupon/index.php";i:1562752741;s:64:"/var/www/html/Golden/application/admin/view/public/container.php";i:1562752741;s:65:"/var/www/html/Golden/application/admin/view/public/frame_head.php";i:1562752741;s:60:"/var/www/html/Golden/application/admin/view/public/style.php";i:1562752741;s:65:"/var/www/html/Golden/application/admin/view/public/inner_page.php";i:1562752741;s:67:"/var/www/html/Golden/application/admin/view/public/frame_footer.php";i:1562752741;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(empty($is_layui) || (($is_layui instanceof \think\Collection || $is_layui instanceof \think\Paginator ) && $is_layui->isEmpty())): ?>
    <link href="/public/system/frame/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <?php endif; ?>
    <link href="/public/static/plug/layui/css/layui.css" rel="stylesheet">
    <link href="/public/system/css/layui-admin.css" rel="stylesheet"></link>
    <link href="/public/system/frame/css/font-awesome.min.css?v=4.3.0" rel="stylesheet">
    <link href="/public/system/frame/css/animate.min.css" rel="stylesheet">
    <link href="/public/system/frame/css/style.min.css?v=3.0.0" rel="stylesheet">
    <script src="/public/system/frame/js/jquery.min.js"></script>
    <script src="/public/system/frame/js/bootstrap.min.js"></script>
    <script src="/public/static/plug/layui/layui.all.js"></script>
    <script>
        $eb = parent._mpApi;
        window.controlle="<?php echo strtolower(trim(preg_replace("/[A-Z]/", "_\\0", think\Request::instance()->controller()), "_"));?>";
        window.module="<?php echo think\Request::instance()->module();?>";
    </script>



    <title></title>
    
    <!--<script type="text/javascript" src="/static/plug/basket.js"></script>-->
<script type="text/javascript" src="/public/static/plug/requirejs/require.js"></script>
<?php /*  <script type="text/javascript" src="/static/plug/requirejs/require-basket-load.js"></script>  */ ?>
<script>
    requirejs.config({
        map: {
            '*': {
                'css': "/public/static/plug/requirejs/require-css.js"
            }
        },
        shim:{
            'iview':{
                deps:['css!iviewcss']
            },
            'layer':{
                deps:['css!layercss']
            }
        },
        baseUrl:'//'+location.hostname+"/public/",
        paths: {
            'static':'static',
            'system':'system',
            'vue':'static/plug/vue/dist/vue.min',
            'axios':'static/plug/axios.min',
            'iview':'static/plug/iview/dist/iview.min',
            'iviewcss':'static/plug/iview/dist/styles/iview',
            'lodash':'static/plug/lodash',
            'layer':'static/plug/layer/layer',
            'layercss':'static/plug/layer/theme/default/layer',
            'jquery':'static/plug/jquery/jquery.min',
            'moment':'static/plug/moment',
//            'mpBuilder':'system/util/mpBuilder',
            'sweetalert':'static/plug/sweetalert2/sweetalert2.all.min'

        },
        basket: {
            excludes:['system/js/index','system/util/mpVueComponent','system/util/mpVuePackage']
//            excludes:['system/util/mpFormBuilder','system/js/index','system/util/mpVueComponent','system/util/mpVuePackage']
        }
    });
</script>
<script type="text/javascript" src="/public/system/util/mpFrame.js"></script>
    
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content">

<style>
    .dropdown-menu li a i{
        width: 10px;
    }
</style>
<div class="row">
    <div class="col-sm-12">
        <div class="ibox">
            <div class="ibox-title">
                <button type="button" class="btn btn-w-m btn-primary" onclick="$eb.createModalFrame(this.innerText,'<?php echo Url('create'); ?>')">添加优惠券</button>
                <div class="ibox-tools">

                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="m-b m-l">
                        <form action="" class="form-inline">

                            <select name="status" aria-controls="editable" class="form-control input-sm">
                                <option value="">是否有效</option>
                                <option value="1" <?php if($where['status'] == '1'): ?>selected="selected"<?php endif; ?>>开启</option>
                                <option value="0" <?php if($where['status'] == '0'): ?>selected="selected"<?php endif; ?>>关闭</option>
                            </select>
                            <div class="input-group">
                                <input type="text" name="title" value="<?php echo $where['title']; ?>" placeholder="请输入优惠券名称" class="input-sm form-control"> <span class="input-group-btn">
                                    <button type="submit" class="btn btn-sm btn-primary"> <i class="fa fa-search" ></i>搜索</button> </span>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="table-responsive" style="overflow:visible">
                    <table class="table table-striped  table-bordered">
                        <thead>
                        <tr>

                            <th class="text-center">编号</th>
                            <th class="text-center">优惠券名称</th>
                            <th class="text-center">优惠券面值</th>
                            <th class="text-center">优惠券最低消费</th>
                            <th class="text-center">优惠券有效期限</th>
                            <th class="text-center">排序</th>
                            <th class="text-center">是否有效</th>
                            <th class="text-center">添加时间</th>
                            <th class="text-center" width="10%">操作</th>
                        </tr>
                        </thead>
                        <tbody class="">
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td class="text-center">
                                <?php echo $vo['id']; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $vo['title']; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $vo['coupon_price']; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $vo['use_min_price']; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $vo['coupon_time']; ?>天
                            </td>
                            <td class="text-center">
                                <?php echo $vo['sort']; ?>
                            </td>
                            <td class="text-center">
                                <i class="fa <?php if($vo['status'] == '1'): ?>fa-check text-navy<?php else: ?>fa-close text-danger<?php endif; ?>"></i>
                            </td>

                            <td class="text-center">
                                <?php echo date('Y-m-d H:i:s',$vo['add_time']); ?>
                            </td>
                            <td class="text-center">
                                <div class="input-group-btn js-group-btn">
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-warning btn-xs dropdown-toggle"
                                                aria-expanded="false">操作
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <?php if($vo['status']): ?>
                                            <li>
                                                <a href="javascript:void(0);" class="del" data-url="<?php echo Url('status',array('id'=>$vo['id'])); ?>">
                                                    <i class="fa  fa-yelp"></i> 立即失效
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" onclick="$eb.createModalFrame(this.innerText+' [<?php echo $vo['title']; ?>] 优惠劵','<?php echo Url('issue',['id'=>$vo['id']]); ?>')">
                                                    <i class="fa  fa-male"></i> 发布
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                            <li>
                                                <a href="javascript:void(0);" class="delstor" data-url="<?php echo Url('delete',array('id'=>$vo['id'])); ?>">
                                                    <i class="fa fa-warning"></i> 删除
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <link href="/public/system/frame/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<div class="row">
    <div class="col-sm-6">
        <div class="dataTables_info" id="DataTables_Table_0_info" role="alert" aria-live="polite" aria-relevant="all">共 <?php echo $total; ?> 项</div>
    </div>
    <div class="col-sm-6">
        <div class="dataTables_paginate paging_simple_numbers" id="editable_paginate">
            <?php echo $page; ?>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div>



<script>
    $('.js-group-btn').on('click',function(){
        $('.js-group-btn').css({zIndex:1});
        $(this).css({zIndex:100});
    });
    $('.del').on('click',function(){
        window.t = $(this);
        var _this = $(this),url =_this.data('url');
        $eb.$swal('delete',function(){
            $eb.axios.get(url).then(function(res){
                console.log(res);
                if(res.status == 200 && res.data.code == 200) {
                    $eb.$swal('success',res.data.msg);
//                        _this.parents('tr').remove();
                }else
                    return Promise.reject(res.data.msg || '修改失败')
            }).catch(function(err){
                $eb.$swal('error',err);
            });
        },{'title':'您确定要修改优惠券的状态吗？','text':'修改后将无法恢复并且已发出的优惠券将失效,请谨慎操作！','confirm':'是的，我要修改'})
    });
    $('.delstor').on('click',function(){
        window.t = $(this);
        var _this = $(this),url =_this.data('url');
        $eb.$swal('delete',function(){
            $eb.axios.get(url).then(function(res){
                console.log(res);
                if(res.status == 200 && res.data.code == 200) {
                    $eb.$swal('success',res.data.msg);
                        _this.parents('tr').remove();
                }else
                    return Promise.reject(res.data.msg || '删除失败')
            }).catch(function(err){
                $eb.$swal('error',err);
            });
        },{'title':'您确定要删除优惠券吗？','text':'删除后将无法恢复,请谨慎操作！','confirm':'是的，我要删除'})
    });
    $(".open_image").on('click',function (e) {
        var image = $(this).data('image');
        $eb.openImage(image);
    })
</script>


</div>
</body>
</html>
