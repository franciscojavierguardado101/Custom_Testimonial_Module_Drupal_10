<?php

namespace Drupal\my_testimonial\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;

/**
 * Defines the Testimonial entity.
 *
 * @ingroup testimonial
 */
class Testimonial extends ContentEntityBase {

  /**
   * {@inheritdoc}
   */
  public static function preCreate(EntityInterface $entity, $clone) {
    parent::preCreate($entity, $clone);
    $entity->setNewRevision();
  }

  /**
   * {@inheritdoc}
   */
  public function getBaseFieldDefinitions() {
    $fields = parent::getBaseFieldDefinitions();

    $fields['testimonial_text'] = BaseFieldDefinition::create('text_long')
      ->setLabel(t('Testimonial Text'))
      ->setRequired(TRUE);

    $fields['field_author'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Author'));

    $fields['field_organization'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Organization'));

    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getEntityType() {
    return $this->entityType;
  }

  /**
   * {@inheritdoc}
   */
  public static function entityTypeLabel() {
    return t('Testimonial');
  }
}
