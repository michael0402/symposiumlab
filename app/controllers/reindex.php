<?php

namespace LibrarianApp;

use Exception;
use Librarian\Container\DependencyInjector;
use Librarian\Mvc\Controller;

/**
 * Class ReindexController
 *
 * Rebuild database indexes.
 */
class ReindexController extends Controller {

    public function __construct(DependencyInjector $di) {

        parent::__construct($di);

        $this->session->close();

        // Authorization.
        $this->authorization->signedId(true);
        $this->authorization->permissions('A');
    }

    /**
     * Main. Initial view.
     *
     * @return string
     * @throws Exception
     */
    public function mainAction(): string {

        $model = new ReindexModel($this->di);
        $info = $model->info();

        $view = new ReindexView($this->di);
        return $view->main($info);
    }

    /**
     * Check SQLite integrity.
     *
     * @return string
     * @throws Exception
     */
    public function checkdbAction(): string {

        // This can take a long time.
        set_time_limit(3600);

        $model = new ReindexModel($this->di);
        $result = $model->checkDb();

        if (empty($result) === false) {

            throw new Exception(sprintf($this->lang->t9n('Some errors were found: %s'), join(', ', $result)), 500);
        }

        $view = new DefaultView($this->di);
        return $view->main(['info' => 'database is OK']);
    }

    /**
     * Vacuum SQLite.
     *
     * @return string
     * @throws Exception
     */
    public function defragmentAction(): string {

        // This can take a long time.
        set_time_limit(3600);

        $model = new ReindexModel($this->di);
        $model->vacuum();

        $view = new DefaultView($this->di);
        return $view->main(['info' => 'database was defragmented']);
    }

    /**
     * Rebuild indexes.
     *
     * @return string
     * @throws Exception
     */
    public function reindexAction(): string {

        // This can take a long time.
        set_time_limit(86400);

        $model = new ReindexModel($this->di);
        $model->reindex();

        $view = new DefaultView($this->di);
        return $view->main(['info' => 'database was indexed']);
    }

    /**
     * Reextract all PDFs.
     *
     * @return string
     * @throws Exception
     */
    public function reextractAction(): string {

        // This can take a long time.
        set_time_limit(86400);

        $model = new ReindexModel($this->di);
        $model->reextract();

        $view = new DefaultView($this->di);
        return $view->main(['info' => 'PDF text were re-extracted.']);
    }
}
