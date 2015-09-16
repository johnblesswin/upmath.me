<?php

/** @var string $formula */
/** @var Tex\Tpl\PackageInterface[] $extraPackages */

?>
\documentclass[11pt]{article}
\batchmode
\usepackage{amsmath}
\usepackage{amssymb}
\newcommand{\R}{\mathbb{R}}
<?php
if (!empty($extraPackages)) {
	foreach ($extraPackages as $package) {
		echo $package->getCode(), "\n";
	}
}
?>
\pagestyle{empty}

\setlength{\topskip}{0pt}
\setlength{\parindent}{0pt}
\setlength{\abovedisplayskip}{0pt}
\setlength{\belowdisplayskip}{0pt}

\begin{document}
{$\displaystyle
\special{dvisvgm:bbox new formula}
\special{dvisvgm:raw<!--start {?x} {?y} -->}
<?php echo $formula; ?>
$
\special{dvisvgm:raw<!--bbox {?bbox formula} -->}}
\end{document}
