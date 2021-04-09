<?php

namespace App\Controller;

use App\Service\MarkdownHelper;
use Michelf\MarkdownInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class ArticleController extends AbstractController
{
    /**
     * @Route("/error", name="app_error")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/view", name="result_show")
     */

    public function show(CacheItemPoolInterface $cache)
    {
        $offers = [
            'Facilisis sociis bibendum ad facilisi cubilia mus fames rutrum, odio leo maecenas nam mollis at pretium, ante dis lobortis morbi purus dui commodo. ',
            'Suscipit metus nibh rhoncus tempor non inceptos habitasse sagittis mollis, quis porta primis pharetra ad massa eleifend integer, nostra ultrices mi feugiat mauris facilisis quisque vestibulum.',
            'Per mattis netus tellus mus taciti magnis inceptos, sapien dignissim lacinia donec natoque cum, blandit aliquam elementum porta class habitant.',
        ];


        $result = urlScrunch('https://example.com/1234567890/foo/bar/baz/42');
        // $    articleContent = $markdown->transform($articleContent);
        $articleContent = $markdownHelper->parse($articleContent, $cache, $markdown);
        return $this->render('article/result.html.twig', [
            'here' => '',
            'there' => $offers[0],
            'everywhere' => $result,
        ]);
    }

    public function urlScrunch(string $rawUrl): string
    {
        $microUrl = $rawUrl;
        // todo
        // todo
        // todo
        return $microUrl;
    }
}
