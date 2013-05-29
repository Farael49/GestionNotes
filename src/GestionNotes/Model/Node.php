<?php
/**
 * Gestion des notes
 *
 * @copyright PTS2 Groupe 5
 * @license Redistribution interdite
 */
namespace GestionNotes\Model;

use GestionNotes\Model as AbstractModel;

/**
 * Représente un étudiant
 */
class User extends AbstractModel
{
    const TYPE_FORMATION        = 1;
    const TYPE_SEMESTRE         = 2;
    const TYPE_GROUPE_TD        = 3;
    const TYPE_GROUPE_TP        = 4;
    const TYPE_PARCOURS         = 5;
    
    /**
     * @var int Identifiant Node
     */
    protected $id;
    
    /**
     * @var string Titre de la node
     */
    protected $name;
    
    /**
     * @var int Type de la node
     */
    protected $type;
    
    /**
     * @var object|int Node parente
     */
    protected $parent;
    
    // ------------------------- OPERATIONS DE LECTURE ------------------------- //
    
    // ------------------------- OPERATIONS DE MODIFICATION ------------------------- //
    
    // ------------------------- OPERATIONS DE SUPPRESSION ------------------------- //
}