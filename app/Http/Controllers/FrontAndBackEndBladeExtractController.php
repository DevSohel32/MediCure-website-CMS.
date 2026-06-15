<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FrontAndBackEndBladeExtractController extends Controller
{
    public function index()
    {
        // Get all translation keys from specified locations and save to lang/en.json
        $translation_data = [];
        
        // Extract from views/front
        $frontViewFiles = $this->getBladeFiles(resource_path('views/front'));
        foreach ($frontViewFiles as $file) {
            $this->extractTranslationsFromFile($file, $translation_data);
        }
        
        // Extract from views/admin
        $adminViewFiles = $this->getBladeFiles(resource_path('views/admin'));
        foreach ($adminViewFiles as $file) {
            $this->extractTranslationsFromFile($file, $translation_data);
        }
        
        // Extract from Controllers/Admin
        $adminControllerFiles = $this->getPhpFiles(app_path('Http/Controllers/Admin'));
        foreach ($adminControllerFiles as $file) {
            $this->extractTranslationsFromFile($file, $translation_data);
        }
        
        // Extract from Controllers/Front
        $frontControllerFiles = $this->getPhpFiles(app_path('Http/Controllers/Front'));
        foreach ($frontControllerFiles as $file) {
            $this->extractTranslationsFromFile($file, $translation_data);
        }

        // Save to en.json (duplicates are automatically removed since we're using array keys)
        file_put_contents(resource_path('lang/en.json'), json_encode($translation_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        echo "Successfully extracted translations from specified locations to en.json. Total unique translations: " . count($translation_data);
    }
    
    private function extractTranslationsFromFile($file, &$translation_data)
    {
        $file_data = file_get_contents($file);
        
        // Match both __('...') and __(\"...\") patterns
        preg_match_all('/__\\((.*?)\\)/', $file_data, $matches);
        
        foreach ($matches[1] as $match) {
            $match = trim($match, "'");
            $match = trim($match, '\"');
            
            // Skip empty matches or variables
            if (!empty($match) && !str_contains($match, '$')) {
                $translation_data[$match] = $match; // Use key as value
            }
        }
    }

    private function getBladeFiles($dir)
    {
        $files = [];
        
        // Check if directory exists
        if (!is_dir($dir)) {
            return $files;
        }
        
        foreach (scandir($dir) as $file) {
            if ($file === '.' || $file === '..') {
                continue;
            }

            $fullPath = $dir . DIRECTORY_SEPARATOR . $file;

            if (is_dir($fullPath)) {
                // If it's a directory, scan recursively
                $files = array_merge($files, $this->getBladeFiles($fullPath));
            } elseif (is_file($fullPath) && pathinfo($fullPath, PATHINFO_EXTENSION) === 'php') {
                // Only add .php (Blade) files
                $files[] = $fullPath;
            }
        }
        return $files;
    }
    
    private function getPhpFiles($dir)
    {
        $files = [];
        
        // Check if directory exists
        if (!is_dir($dir)) {
            return $files;
        }
        
        foreach (scandir($dir) as $file) {
            if ($file === '.' || $file === '..') {
                continue;
            }

            $fullPath = $dir . DIRECTORY_SEPARATOR . $file;

            if (is_dir($fullPath)) {
                // If it's a directory, scan recursively
                $files = array_merge($files, $this->getPhpFiles($fullPath));
            } elseif (is_file($fullPath) && pathinfo($fullPath, PATHINFO_EXTENSION) === 'php') {
                // Only add .php files
                $files[] = $fullPath;
            }
        }
        return $files;
    }
}
