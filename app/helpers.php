<?php

use App\Models\Image;
use App\Services\Schema\Schema;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\HtmlString;
use Spatie\MediaLibrary\Models\Media;

function svg($filename): HtmlString
{
    return new HtmlString(
        file_get_contents(resource_path("svg/{$filename}.svg"))
    );
}

function image(string $path): ?Media
{
    $image = Image::findByPath($path);

    if (! $image) {
        $image = Image::createWithPath($path);
    }

    return optional($image)->getFirstMedia();
}

function is_office_open(): bool
{
    if (! now()->isWeekday()) {
        return false;
    }

    $startTime = now()->hour(9)->minute(0);
    $endTime = now()->hour(17)->minute(30);

    return now()->between($startTime, $endTime);
}

function gravatar_img(string $name): HtmlString
{
    $gravatarId = md5(strtolower(trim($name)));

    return new HtmlString('<img src="https://gravatar.com/avatar/' . $gravatarId . '?s=240">');
}

function faker(): Generator
{
    return Factory::create();
}

function mailto(string $subject, string $body): string
{
    $subject = rawurlencode(htmlspecialchars_decode($subject));

    $body = rawurlencode(htmlspecialchars_decode($body));

    return "mailto:info@irabu.co.tz?subject={$subject}&body={$body}" ;
}

function schema(): Schema
{
    return app(Schema::class);
}
