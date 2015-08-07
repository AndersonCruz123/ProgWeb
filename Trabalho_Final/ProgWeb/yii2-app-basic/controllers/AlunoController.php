<?php

namespace app\controllers;

use Yii;
use app\models\Aluno;
use app\models\AlunoSearch;
use app\models\Curso;
use app\models\CursoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * AlunoController implements the CRUD actions for Aluno model.*/
class AlunoController extends Controller
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
     * Lists all Aluno models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlunoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionTurma()
    {
        $searchModel = new AlunoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('turma', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single Aluno model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {

        if (Aluno::findOne($id) !== null) {
       
        $aux = $this->findModel($id);
        //echo $cont;
        return $this->render('view', [
            'model' => $this->afterFind($this->findModel($id)),
            'cont' => $cont = Aluno::find()->where('ano_ingresso='.$aux->ano_ingresso)->count()
        ]);
        }
        else {
            $aux = $this->findModel(1548);
            return $this->render('view', [
            'model' => $this->afterFind($this->findModel(1548)),
            'cont' => $cont = Aluno::find()->where('ano_ingresso='.$aux->ano_ingresso)->count()
        ]);
        }
    }

    /**
     * Creates a new Aluno model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Aluno();
        
          $arraycursos=ArrayHelper::map(CursoSearch::find()->all(),'id','nome');

        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['view', 'id' => $model->id, 'arraycursos'=>$arraycursos]);
        } else {
            return $this->render('create', [
                'model' => $model, 
                'arraycursos'=>$arraycursos
            ]);
        }
    }

    /**
     * Updates an existing Aluno model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->afterFind($this->findModel($id));
        
     
        $arraycursos=ArrayHelper::map(CursoSearch::find()->all(),'id','nome');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['view', 'id' => $model->id, 'arraycursos'=>$arraycursos]);
        } else {

            return $this->render('update', [
                'model' => $model,
             'arraycursos'=>$arraycursos
            ]);
        }
    }

    /**
     * Deletes an existing Aluno model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Aluno model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Aluno the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Aluno::findOne($id)) !== null) {
        //$model->nome=ucwords(strtolower($model->nome));
          //  $this->afterFind($model);
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function afterFind($model)
    {
        if ($model !== null){
            $model->nome=ucwords(strtolower($model->nome));


            if ($model->sexo=='M') $model->sexo = "Masculino";
            else $model->sexo = "Feminino";
            
   /*         if ($model->id_curso == 1) $model->id_curso = "Ciência da Computação";
            else if ($model->id_curso == 2) $model->id_curso = "Sistemas de Informação";
            else $model->id_curso = "Engenharia da Computação";*/

            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
