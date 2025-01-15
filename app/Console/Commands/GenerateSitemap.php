<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\Page;
use App\Models\Service;
use App\Models\Specialist;
use App\Models\Stock;
use DateTimeInterface;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically Generate an XML Sitemap';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
  {
    $sitemap = Sitemap::create();

    $sitemap
      ->add(Url::create('/')
      ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
      ->setLastModificationDate(new \DateTimeImmutable(now()->format('Y-m-d'))))
      ->add(Url::create('/blog')
      ->setPriority(0.9)
      ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
      ->setLastModificationDate(new \DateTimeImmutable(now()->format('Y-m-d'))))
      ->add(Url::create('/uslugi')
      ->setPriority(0.9)
      ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
      ->setLastModificationDate(new \DateTimeImmutable(now()->format('Y-m-d'))))
      ->add(Url::create('/vrachi')
      ->setPriority(0.9)
      ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
      ->setLastModificationDate(new \DateTimeImmutable(now()->format('Y-m-d'))))
      ->add(Url::create('/akcii')
      ->setPriority(0.9)
      ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
      ->setLastModificationDate(new \DateTimeImmutable(now()->format('Y-m-d'))));

    Blog::all()->each(function ($blog) use ($sitemap) {
      $sitemap->add(Url::create("/blog/{$blog->slug}")
      ->setPriority(0.5)
      ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
      ->setLastModificationDate(new \DateTimeImmutable($blog->updated_at->format('Y-m-d'))));
    });

    Page::all()->each(function ($page) use ($sitemap) {
      $sitemap->add(Url::create("/{$page->slug}")->setPriority(0.5)
      ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
      ->setLastModificationDate(new \DateTimeImmutable($page->updated_at->format('Y-m-d'))));
    });

    Service::all()->each(function ($service) use ($sitemap) {
      $sitemap->add(Url::create("/uslugi/{$service->slug}")->setPriority(0.5)
      ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
      ->setLastModificationDate(new \DateTimeImmutable($service->updated_at->format('Y-m-d'))));
    });

    Specialist::all()->each(function ($specialist) use ($sitemap) {
      $sitemap->add(Url::create("/vrachi/{$specialist->slug}")->setPriority(0.5)
      ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
      ->setLastModificationDate(new \DateTimeImmutable($specialist->updated_at->format('Y-m-d'))));
    });

    Stock::all()->each(function ($stock) use ($sitemap) {
      $sitemap->add(Url::create("/akcii/{$stock->slug}")->setPriority(0.5)
      ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
      ->setLastModificationDate(new \DateTimeImmutable($stock->updated_at->format('Y-m-d'))));
    });

    $sitemap->writeToFile(public_path('sitemap.xml'));
  }
}

