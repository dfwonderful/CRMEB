<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:79:"/var/www/html/Golden/application/admin/view/store/store_product_reply/index.php";i:1562752741;s:64:"/var/www/html/Golden/application/admin/view/public/container.php";i:1562752741;s:65:"/var/www/html/Golden/application/admin/view/public/frame_head.php";i:1562752741;s:60:"/var/www/html/Golden/application/admin/view/public/style.php";i:1562752741;s:67:"/var/www/html/Golden/application/admin/view/public/frame_footer.php";i:1562752741;}*/ ?>
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
    
<style>
    .message-content .media-body {margin-bottom: 60px;}
    .layadmin-homepage-list-imgtxt .media-body {width: auto;display: block;overflow: hidden;}
    .layadmin-message-fluid .layui-col-md12 {background: #fff;height: auto;padding-bottom: 50px;}
    .message-content {padding: 0 40px;}
    .message-content .media-left {float: left;margin-right: 10px;}
    .message-content .media-body{margin-top:10px;}
    .message-content .media-body .pad-btm {padding-bottom: 0;}
    .message-content .media-left img {border-radius: 50%;}
    .layadmin-homepage-list-imgtxt .media-body .pad-btm p:first-child {padding-bottom: 5px;}
    .layadmin-homepage-list-imgtxt .media-body .pad-btm .fontColor a {font-weight: 600;color: #337ab7;}
    .layadmin-homepage-list-imgtxt .media-body .min-font {margin-bottom: 10px;}
    .layui-breadcrumb {visibility: hidden;font-size: 0;}
    .layadmin-homepage-list-imgtxt .media-body .min-font .layui-breadcrumb a {font-size: 11px;}
    .layui-breadcrumb a {color: #999!important;}
    .media-body .message-text {padding-top: 10px;padding-bottom: 10px;border-bottom: 1px solid #e0e0e0;}
    .media-body .message-text .image-box{margin-top: 10px;}
    .media-body .message-text .image-box img{max-width: 300px;max-height: 200px;margin-right: 10px;margin-bottom: 10px}
    .message-content-btn {text-align: center;padding: 10px 0;}
    .media-body .message-but{margin-top: 10px;}
    .message-content .message-content-btn .layui-btn {height: auto;line-height: 26px;padding: 5px 30px;font-size: 16px;}
    .message-content .homepage-bottom .layadmin-privateletterlist-item .meida-left img{width: 151px;height: 81px;}
    .message-content .homepage-bottom .layadmin-privateletterlist-item{border: 1px solid #e0e0e0;margin-bottom: 10px;cursor:pointer;}
    .message-content .homepage-bottom .layadmin-privateletterlist-item .meida-right{padding: 10px;}
    .message-content .homepage-bottom .layadmin-privateletterlist-item.on{border: 1px solid #0092DC!important;}
    .message-content .homepage-bottom .layadmin-privateletterlist-item .meida-right .meida-store_name{font-size: 20px;}
    .message-content .homepage-bottom .layadmin-privateletterlist-item .centent{text-align: center;}
    .clearfix:after {  content: "."; display: block; height: 0; clear: both; visibility: hidden;  }
    .message-content .homepage-bottom .producr-load{text-align: center;margin-bottom: 10px}
    .message-content .homepage-bottom .producr-load .layui-btn{margin-bottom: 10px}
</style>
<script src="/public/static/plug/sweetalert2/sweetalert2.all.min.js"></script>

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

<div class="layui-fluid">
    <div class="layui-row layui-col-space15"  id="app">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">搜索条件</div>
                <div class="layui-card-body">
                    <form class="layui-form layui-form-pane" action="">
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <label class="layui-form-label">内容</label>
                                <div class="layui-input-block">
                                    <input type="text" name="title" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">筛选类型</label>
                                <div class="layui-input-block">
                                    <select name="is_reply">
                                        <option value="">全部</option>
                                        <option value="2">已回复</option>
                                        <option value="0">未回复</option>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-inline">
                                <div class="layui-input-inline">
                                    <button class="layui-btn layui-btn-sm layui-btn-normal" lay-submit="search" lay-filter="search">
                                        <i class="layui-icon layui-icon-search"></i>搜索</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="message-box" id="app" v-cloak="">
            <div class="layui-col-md3" style="padding: 0 10px 0 0">
                <div class="layui-card">
                    <div class="layui-card-header">评论产品</div>
                    <div class="layui-card-body layadmin-homepage-list-imgtxt message-content" ref="producr">
                        <div class="grid-demo">
                            <div class="layui-card homepage-bottom">
                                <div class="layui-card-body clearfix">
                                    <div class="layadmin-privateletterlist-item" :class="where.producr_id==0 ? 'on':'' " @click="where.producr_id=0">
                                        <div class="meida-right centent">
                                            <mdall class="meida-store_name">全部评论商品</mdall>
                                        </div>
                                    </div>
                                    <div class="layadmin-privateletterlist-item layui-col-md6 layui-col-xs6 layui-col-lg6" :class="where.producr_id==item.id ? 'on':'' " v-for="item in productImaesList" @click="where.producr_id=item.id">
                                        <div class="meida-left">
                                            <img :src="item.image" @click="lockImage(item.image)">
                                        </div>
                                        <div class="meida-right">
                                            <p>￥{{item.price}}</p>
                                            <mdall v-text="item.store_name"></mdall>
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-row producr-load clearfix">
                                    <a href="javascript:;" class="layui-btn" v-text="product.loadTitle" @click="loadList(0)">更多</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-col-md9">
                <div class="layui-card">
                    <div class="layui-card-header">评论列表</div>
                    <div class="layui-card-body layadmin-homepage-list-imgtxt message-content">
                        <div class="media-body" v-for="(item,index) in messageList">
                            <a href="javascript:;" class="media-left" style="float: left;">
                                <img :src="item.avatar" height="46px" width="46px">
                            </a>
                            <div class="pad-btm">
                                <p class="fontColor"><a href="javascript:;" v-text="item.nickname"></a></p>
                                <p class="min-font">
                                  <span class="layui-breadcrumb" style="visibility: visible;">
                                    <a href="javascript:;" v-text="item.time"></a>
                                  </span>
                                </p>
                            </div>
                            <div class="message-text">
                                <p v-text="item.comment"></p>
                                <div class="image-box" v-if="item.pics.length">
                                    <img :src="pic" alt="" v-for="pic in item.pics" @click="lockImage(pic)">
                                </div>
                            </div>
                            <div class="message-but">
                                <div class="layui-btn-group">
                                    <button class="layui-btn layui-btn-normal layui-btn-sm" @click="edit(item,index)">{{item.merchant_reply_time ? "编辑":"回复"}}</button>
                                    <button class="layui-btn layui-btn-danger layui-btn-sm" @click="delReply(item,index)">删除</button>
                                </div>
                            </div>
                            <fieldset class="layui-elem-field" style="margin-top: 10px" v-if="item.merchant_reply_time">
                                <legend style="font-size: 15px">回复</legend>
                                <div class="layui-field-box" v-text="item.merchant_reply_content"></div>
                            </fieldset>
                        </div>
                        <div class="layui-row message-content-btn">
                            <div id="message"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/public/system/js/layuiList.js"></script>



<script type="text/javascript">
    require(['vue'],function(Vue) {
        new Vue({
            el: "#app",
            data: {
                productImaesList:[],
                where:{
                    page:1,
                    title:'',
                    is_reply:'',
                    limit:10,
                    producr_id:0,
                    message_page:1,
                },
                product:{
                    loading:false,
                    loadend:false,
                    loadTitle:'加载更多',
                },
                messageList:[],
                message:{
                    loading:false,
                    loadend:false,
                    loadTitle:'加载更多',
                },
                count:0,
            },
            watch:{
                'where.producr_id':function (n) {
                    this.message.loadend=false;
                    this.where.message_page=1;
                    this.$set(this,'messageList',[]);
                    this.getMessageList();
                },
                'where.message_page':function () {
                    this.getMessageList(true);
                }
            },
            methods:{
                delReply:function(item,index){
                    var url = layList.U({a:'delete',p:{id:item.id}}),that=this;
                    $eb.$swal('delete',function(){
                        $eb.axios.get(url).then(function(res){
                            if(res.status == 200 && res.data.code == 200) {
                                $eb.$swal('success',res.data.msg);
                                that.messageList.splice(index,1);
                                that.$set(that,'messageList',that.messageList);
                            }else
                                return Promise.reject(res.data.msg || '删除失败')
                        }).catch(function(err){
                            $eb.$swal('error',err);
                        });
                    })
                },
                edit:function(item,index){
                    var url=layList.U({a:'set_reply'}),rid=item.id;
                    $eb.$alert('textarea',{'title':'请输入回复内容','value':item.merchant_reply_content},function(result){
                        $eb.axios.post(url,{content:result,id:rid}).then(function(res){
                            if(res.status == 200 && res.data.code == 200) {
                                item.merchant_reply_time=1;
                                item.merchant_reply_content=result;
                                $eb.swal(res.data.msg);
                            }else
                                $eb.swal(res.data.msg);
                        });
                    })
                },
                loadList:function(){
                    this.getProductImaesList();
                },
                lockImage:function(href){
                    return layList.layer.open({
                        type: 1,
                        title: false,
                        closeBtn: 0,
                        shadeClose: true,
                        content: '<img src="'+href+'" style="display: block;width: 100%;" />'
                    });
                },
                getProductImaesList:function () {
                    var that=this;
                    if(that.product.loading) return;
                    if(that.product.loadend) return;
                    that.product.loadTitle='加载中';
                    layList.baseGet(layList.U({a:'get_product_imaes_list',q:that.where}),function (res) {
                        var list=res.data;
                        var loadend=list.length < that.where.limit;
                        that.where.page=that.where.page+1;
                        that.product.loading=false;
                        that.product.loadend=loadend;
                        that.product.loadTitle=loadend ? '已全部加载' : '加载更多';
                        that.productImaesList.push.apply(that.productImaesList,list);
                        that.$set(that,'productImaesList',that.productImaesList);
                        that.slitherMonitor();
                    },function (res) {
                        that.product.loading=false;
                        that.product.loadTitle='加载更多';
                    });
                },
                getMessageList:function (isFa) {
                    var that=this;
                    if(that.message.loading) return;
                    if(that.message.loadend) return;
                    that.message.loadTitle='加载中';
                    var index=layList.layer.load(1, {shade: [0.1,'#fff'] });
                    layList.baseGet(layList.U({a:'get_product_reply_list',q:that.where}),function (res) {
                        var list=res.data.list;
                        var loadend=list.length < that.where.limit;
                        that.message.loading=false;
                        that.message.loadend=loadend;
                        that.count=res.data.count;
                        that.message.loadTitle=loadend ? '已全部加载' : '加载更多';
                        that.$set(that,'messageList',list);
                        layList.layer.close(index);
                        isFa || that.initPage();
                    },function (res) {
                        that.message.loading=false;
                        that.message.loadTitle='加载更多';
                        layList.layer.close(index);
                    });
                },
                slitherMonitor:function () {
                    var clientHeight=document.documentElement.clientHeight;
                    if(this.$refs.producr.offsetHeight >= clientHeight) this.$refs.producr.style.overflowX='scroll';
                    else this.$refs.producr.style.overflow='hidden';
                },
                initPage:function () {
                    var that=this;
                    layList.laypage.render({
                        elem: 'message'
                        ,count: that.count
                        ,limit:10
                        ,jump: function(obj){
                            that.where.message_page=obj.curr;
                        }
                    });
                }
            },
            mounted:function () {
                layList.form.render();
                this.getProductImaesList();
                this.getMessageList();
                //查询
                var that=this;
                layList.search('search',function(where){
                    if(that.where.title==where.title && that.where.is_reply==where.is_reply) return false;
                    that.where.title=where.title;
                    that.where.is_reply=where.is_reply;
                    that.where.message_page=1;
                    that.message.loadend=false;
                    that.getMessageList();
                });
            }
        })
    })
</script>


</div>
</body>
</html>
