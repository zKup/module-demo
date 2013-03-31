<?php

/**
 * Class blocdemo
 *
 * Exemple simple de module affichant l'heure dans le header du site
 *
 * Lors de l'installation nous "greffons" ce module au "header"
 * A chaque page affichée la méthode "hookHeader" sera exécutée
 *
 * Les emplacements possibles (header, footer, sidebar..) sont disponibles dans la table "zkup_hooks"
 * - header
 * - footer
 * - sidebar_left
 * - sidebar_right
 * - before_login
 * - after_login
 * - before_is_auth
 * - init
 *
 * et leurs méthodes associées :
 *
 * - hookHeader
 * - hookFooter
 * - hookSidebar_left
 * - hookSidebar_right
 * - hookBefore_login
 * - hookAfter_login
 * - hookBefore_is_auth
 * - hookInit
 *
 */
class blocdemo extends UnModule
{
    function __construct()
    {
        parent::__construct();

        $this->nom = 'Bloc de démonstration';
        $this->version = '1.0';

        /**
         * Doit être identique au nom de la classe ci-dessus
         */
        $this->module = 'blocdemo';

        /**
         * Choix possibles :
         * - blocs
         * - integration
         * - statistiques
         * - navigation
         *
         * Vous pouvez ajouter les votres dans la table "zkup_groupes"
         */
        $this->groupe = 'blocs';
    }

    /**
     * Méthode exécutée lors de l'installation du module
     */
    public function installer()
    {
        $this->registerHook('header');
    }

    /**
     * Méthode exécutée lors de la désinstallation du module
     */
    public function desinstaller()
    {
    }

    /**
     * Méthode exécutée lors de l'activation de votre module
     */
    public function activer()
    {
    }

    /**
     * Méthode exécutée lors de la désactivation de votre module
     */
    public function desactiver()
    {
    }

    /**
     * retourne le code html à afficher
     * @return string
     */
    public function hookHeader()
    {
        $html = $this->template('blocdemo.tpl');//Permet de récupérer directement le template dans le dossier du module
        return $html;
    }

}
