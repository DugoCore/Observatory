<?php

namespace Drupal\corporate_plus\TwigExtension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Custom Twig extension for corporate_plus theme.
 */
class CorporatePlusTwigExtension extends AbstractExtension {

  /**
   * {@inheritdoc}
   */
  public function getFunctions() {
    return [
      new TwigFunction('get_latest_news', [$this, 'getLatestNews']),
    ];
  }

  /**
   * Get latest news with images.
   *
   * @param int $limit
   *   Number of news to return.
   *
   * @return array
   *   Array of news items.
   */
  public function getLatestNews($limit = 4) {
    $news = [];
    
    try {
      // Query for latest news nodes
      $query = \Drupal::entityQuery('node')
        ->condition('type', 'noticia_del_observatorio')
        ->condition('status', 1)
        ->sort('created', 'DESC')
        ->range(0, $limit);
      
      $nids = $query->execute();
      
      if (!empty($nids)) {
        $nodes = \Drupal::entityTypeManager()
          ->getStorage('node')
          ->loadMultiple($nids);
        
        foreach ($nodes as $node) {
          $news_item = [
            'id' => $node->id(),
            'title' => $node->getTitle(),
            'url' => $node->toUrl()->toString(),
            'description' => '',
            'image_url' => '',
          ];
          
          // Get description
          if ($node->hasField('field_descripcion_de_la_noticia') && !$node->get('field_descripcion_de_la_noticia')->isEmpty()) {
            $news_item['description'] = $node->get('field_descripcion_de_la_noticia')->value;
          }
          
          // Get image
          if ($node->hasField('field_imagen_de_la_noticia') && !$node->get('field_imagen_de_la_noticia')->isEmpty()) {
            $file = $node->get('field_imagen_de_la_noticia')->entity;
            if ($file) {
              $news_item['image_url'] = $file->createFileUrl();
            }
          }
          
          $news[] = $news_item;
        }
      }
    }
    catch (\Exception $e) {
      \Drupal::logger('corporate_plus')->error('Error getting latest news: @error', ['@error' => $e->getMessage()]);
    }
    
    return $news;
  }

}
