<?php


// Get all parent categories with their children
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;

$categories = Category::parents()->with('children')->get();

// Get all posts in a category including subcategories
$categoryPosts = Category::find($id)->posts()
    ->orWhereIn('category_id', Category::where('parent_id', $id)->pluck('id'))
    ->get();

// Get popular tags
$popularTags = Tag::popular()->limit(10)->get();

// Get posts with specific tag
$tagPosts = Tag::where('slug', $slug)->firstOrFail()->posts;

// Add tags to a post
$post->tags()->attach($tagIds);

// Get posts with categories and tags
$posts = Post::with(['category', 'tags'])->latest()->get();
