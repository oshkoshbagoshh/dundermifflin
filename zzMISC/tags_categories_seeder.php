<?php

// Seeder or import script to populate categories and tags
use App\Models\Category;
use App\Models\Tag;

// Seeder or import script to populate categories and tags
$categoriesData = json_decode(file_get_contents('categories_tags.json'), true);

// Create parent categories and their children
foreach ($categoriesData['categories'] as $categoryData) {
    $parentCategory = Category::create([
        'name' => $categoryData['name'],
        'slug' => Str::slug($categoryData['name']),
        'is_active' => true
    ]);

    if (isset($categoryData['children'])) {
        foreach ($categoryData['children'] as $childName) {
            Category::create([
                'name' => $childName,
                'slug' => Str::slug($childName),
                'parent_id' => $parentCategory->id,
                'is_active' => true
            ]);
        }
    }
}

// Create tags
foreach ($categoriesData['tags'] as $tagName) {
    Tag::create([
        'name' => $tagName,
        'slug' => Str::slug($tagName)
    ]);
}


// Create tags
foreach ($categoriesData['tags'] as $tagName) {
    Tag::create([
        'name' => $tagName,
        'slug' => Str::slug($tagName)
    ]);
}

