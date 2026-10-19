<?php
/**
 * BcLpPortfolioTheme : baserCMS5 ポートフォリオ LP テーマ
 *
 * メールフォーム：入力
 *
 * - 見出し：メールフォームのタイトル
 * - リード文：メールフォーム設定の「説明文」
 * - 項目：メールフィールド（管理画面で追加・並べ替えできる）
 *
 * @var \BcMail\View\MailFrontAppView $this
 */
$this->BcBaser->element('form_datepicker');
?>
<section class="pf-fsec">
	<div class="pf-wrap">
		<div class="pf-fhead">
			<p class="pf-eyebrow" aria-hidden="true">Contact</p>
			<h1 class="pf-fhead__title"><?php $this->BcBaser->contentsTitle() ?></h1>
		</div>
		<?php $this->BcBaser->element('lp_steps', ['current' => 1]) ?>
		<div class="pf-fbox">
			<div class="pf-fbox__lead"><?php $this->Mail->description() ?></div>
			<?php $this->BcBaser->flash() ?>
			<div class="pf-form">
				<?php $this->BcBaser->element('mail_form') ?>
			</div>
		</div>
	</div>
</section>
