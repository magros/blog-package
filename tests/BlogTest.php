<?php

use Magros\BlogPackage\Models\Post;
use Magros\BlogPackage\Tests\TestCase;

class BlogTest extends TestCase
{
    /**
     * @test
     */
    public function it_test_that_i_can_create_a_post()
    {
        $this->visit('/blog-package/posts/create')
            ->type('aiuda', 'title')
            ->type('Texto chido', 'body')
            ->press('Guardar');

        $this->seeInDatabase('blog_package_posts', [
            'title' => 'aiuda',
            'body' => 'Texto chido'
        ]);
    }


    /**
     * @test
     */
    public function it_test_that_i_can_edit_a_post()
    {
        $post = factory(Post::class)->create();

        $this->visit("/blog-package/posts/{$post->id}/edit")
            ->type('aiuda', 'title')
            ->type('Texto chido', 'body')
            ->press('Guardar');

        $this->seeInDatabase('blog_package_posts', [
            'id' => $post->id,
            'title' => 'aiuda',
            'body' => 'Texto chido'
        ]);
    }


    /**
     * @test
     */
    public function it_test_that_i_can_view_all_posts()
    {
        $post = factory(Post::class)->create();
        $anotherPost = factory(Post::class)->create();

        $this->visit("/blog-package/posts")
            ->see($anotherPost->title)
            ->see($post->title);
    }

    /**
     * @test
     */
    public function it_test_that_i_can_delete_a_post()
    {
        $post = factory(Post::class)->create();
        $this->visit("/blog-package/posts")->press('Eliminar');
        $this->dontSeeInDatabase('blog_package_posts', [
            'id' => $post->id,
        ]);
    }
}