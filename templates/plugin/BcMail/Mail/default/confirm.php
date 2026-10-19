<?php
/**
 * BcLpPortfolioTheme : baserCMS5 ポートフォリオ LP テーマ
 *
 * メールフォーム：確認
 *
 * @var \BcMail\View\MailFrontAppView $this
 * @var bool $freezed 確認画面かどうか（入力エラーのときは false）
 */
if ($freezed) {
	$this->Mailform->freeze();
} else {
	$this->BcBaser->element('form_datepicker');
}
?>
<section class="pf-fsec">
	<div class="pf-wrap">
		<div class="pf-fhead">
			<p class="pf-eyebrow" aria-hidden="true">Contact</p>
			<h1 class="pf-fhead__title"><?php $this->BcBaser->contentsTitle() ?></h1>
		</div>
		<?php $this->BcBaser->element('lp_steps', ['current' => $freezed? 2 : 1]) ?>
		<div class="pf-fbox">
			<?php if ($freezed): ?>
				<p class="pf-fbox__lead">入力内容をご確認ください。よろしければ「送信する」を押してください。まだ送信は完了していません。</p>
			<?php else: ?>
				<div class="pf-fbox__lead"><?php $this->Mail->description() ?></div>
			<?php endif ?>
			<?php $this->BcBaser->flash() ?>
			<div class="pf-form<?= $freezed? ' is-confirm' : '' ?>">
				<?php $this->BcBaser->element('mail_form') ?>
			</div>
		</div>
	</div>
</section>
