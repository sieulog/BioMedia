<?php

namespace backend\controllers;

use Yii;
use common\models\VideoCategory;
use backend\models\VideoCategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\onecms\TreeHelper;

/**
 * VideoCategoryController implements the CRUD actions for VideoCategory model.
 */
class VideoCategoryController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all VideoCategory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VideoCategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single VideoCategory model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new VideoCategory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new VideoCategory();
        $treeParents = TreeHelper::build($model->find()->addOrderBy('tree')->addOrderBy('lft')->all());
        if ($model->load(Yii::$app->request->post())) {
            if(empty($model->parent_id)) {
                $model->makeRoot();
            } else {
                $root = $model->findOne(['id' => $model->parent_id]);
                $model->appendTo($root);
            }
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
                'treeParents' => $treeParents,
            ]);
        }
    }

    /**
     * Updates an existing VideoCategory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $treeParents = TreeHelper::build($model->find()->addOrderBy('tree')->addOrderBy('lft')->all());
        if ($model->load(Yii::$app->request->post())) {
            if(empty($model->parent_id)) {
                $model->save();
            } else {
                $root = $model->findOne(['id' => $model->parent_id]);
                $model->appendTo($root);
            }
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
                'treeParents' => $treeParents,
            ]);
        }
    }

    /**
     * Deletes an existing VideoCategory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->deleteWithChildren();

        return $this->redirect(['index']);
    }

    /**
     * Finds the VideoCategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return VideoCategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = VideoCategory::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
