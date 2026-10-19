<?php
/**
 * BcLpPortfolioTheme : baserCMS5 ポートフォリオ LP テーマ
 *
 * 手続きの段階（1入力 → 2確認 → 3完了）
 *
 * @var \BaserCore\View\BcFrontAppView $this
 * @var int $current 現在の手順（1〜3）
 */
$steps = [1 => '入力', 2 => '確認', 3 => '完了'];
?>
<ol class="pf-steps" aria-label="手続きの段階">
	<?php foreach ($steps as $no => $label): ?>
		<?php $cls = ($no === $current)? 'is-current' : (($no < $current)? 'is-done' : '') ?>
		<li<?= $cls? ' class="' . $cls . '"' : '' ?><?= ($no === $current)? ' aria-current="step"' : '' ?>><span class="pf-steps__n"><?= sprintf('%02d', $no) ?></span><span><?= h($label) ?></span></li>
	<?php endforeach ?>
</ol>
