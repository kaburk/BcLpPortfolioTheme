<?php
/**
 * BcLpPortfolioTheme : baserCMS5 ポートフォリオ LP テーマ
 *
 * フッター
 *
 * - 主催者名・問い合わせ先：ウィジェットエリア（テキストウィジェット）で編集する
 * - コピーライト：サイト名と年から自動で出す
 *
 * @var \BaserCore\View\BcFrontAppView $this
 */
?>
<footer class="pf-footer">
	<div class="pf-wrap">
		<div class="pf-footer__inner">
			<?php $this->BcBaser->widgetArea() ?>
		</div>
		<small class="pf-footer__copy">&copy; <?= date('Y') ?> <?= h($this->Lp->getSiteLabel()) ?></small>
	</div>
</footer>
