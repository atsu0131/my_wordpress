<div class="p-sidebar">
    <?php
        if ( is_active_sidebar( 'category_widget' ) ) :
            dynamic_sidebar( 'category_widget' );
        else:
    ?>
    <div class="widget">
        <h2>No Widget</h2>
        <p>ウィジットは設定されていません。</p>
    </div>
    <?php endif; ?>
	<div class="widget">
		<h2><i class="fa fa-folder-open" aria-hidden="true"></i> Category</h2>
		<ul>
			<li><a href="#">カテゴリ名</a></li>
			<li><a href="#">カテゴリ名</a></li>
		</ul>
	</div>
	<div class="widget">
		<h2><i class="fa fa-tags" aria-hidden="true"></i> Tag</h2>
		<div class="tagcloud"><a class="tag-cloud-link" href="#">タグ</a><a class="tag-cloud-link" href="#">タグ</a></div>
	</div>
	<div class="widget">
		<h2><i class="fa fa-archive" aria-hidden="true"></i> Archive</h2>
		<ul>
			<li><a href="#">2017年10月</a></li>
			<li><a href="#">2017年9月</a></li>
		</ul>
	</div>
</div>