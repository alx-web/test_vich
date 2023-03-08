<?php

namespace App\DataFixtures;

use App\Entity\Projects;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


		$i = 1;
        while($i <= 5)
		{
			$filename = "test".$i.".pdf";
			$project = new Projects();
			$project->setTitle("test".$i);

			$fileThumbnail = new UploadedFile($filename, $filename, null, null, true);
			$project->setImageFile($fileThumbnail);
			$project->setImageName($filename);

			$manager->persist($project);
			$manager->flush();
			$i++;
		}


    }
}
