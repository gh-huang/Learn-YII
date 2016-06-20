<?php
$this->title= '添加日志';
$this->context->layout = 'blog';
?>
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?=site_url('admin/blogc/add')?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th width="100"><i class="require-red">*</i>标题：</th>
                                <td>
                                    <?php $error = form_error('title'); ?>
                                    <input <?php if($error) echo 'style="border-color:#F00;"'; ?> class="common-text required" id="title" name="title" size="50" value="<?=set_value('title')?>" type="text">
                                    <span style="color:#F00;font-weight:bold;"><?=$error?></span>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>内容：</th>
                                <td>
                                    <?php $error = form_error('content'); ?>
                                    <textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;<?php if($error) echo 'border-color:#F00;'; ?>" rows="10"><?=set_value('content')?></textarea>
                                    <span style="color:#F00;font-weight:bold;"><?=$error?></span>
                                </td>
                            </tr>
                            <tr>
                                <th>是否显示：</th>
                                <td>
                                    <input type="radio" name="is_show" value="是" checked="checked" />是
                                    <input type="radio" name="is_show" value="否" />否
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>