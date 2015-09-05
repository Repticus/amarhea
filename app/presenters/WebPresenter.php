<?php

namespace App\Presenters;

use Nette,
	 Nette\Utils\Finder;

class WebPresenter extends Nette\Application\UI\Presenter {

	public function renderDefault() {

	}

	public function actionKouzelneAmulety() {
		$this->template->gallery = $this->context->parameters['amulets'];
		$this->template->dir = 'amulety';
	}

	public function actionGalerie() {
		$this->template->gallery = $this->context->parameters['galerie'];
		$this->template->dir = 'fotogalerie';
	}

	public function getImages($dir, $gallery) {
		try {
			$images = array();
			foreach (Finder::findFiles("*.jpg")->in("$dir/$gallery") as $file) {
				$image['path'] = "$dir/$gallery/" . $file->getFilename();
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
