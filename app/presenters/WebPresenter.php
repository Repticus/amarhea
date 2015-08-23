<?php

namespace App\Presenters;

use Nette,
	 Nette\Utils\Finder;

class WebPresenter extends Nette\Application\UI\Presenter {

	public function renderDefault() {

	}

	public function actionKouzelneAmulety() {
		$this->template->amulets = $this->context->parameters['amulets'];
	}

	public function getImages($gallery) {
		try {
			$images = array();
			foreach (Finder::findFiles("*.jpg")->in("amulety/" . $gallery) as $file) {
				$image['path'] = "amulety/$gallery/" . $file->getFilename();
				$exif = exif_read_data($image['path']);
				$image['title'] = isset($exif['ImageDescription']) ? $exif['ImageDescription'] : NULL;
				$images[] = $image;
			}
			return $images;
		} catch (Exception $e) {
			return array();
		}
	}

}
