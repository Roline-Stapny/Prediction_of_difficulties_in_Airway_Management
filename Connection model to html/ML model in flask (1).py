import numpy as np # linear algebra
import pandas as pd # data processing, CSV file I/O (e.g. pd.read_csv)



#Import models from scikit learn module:
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression

from sklearn import metrics

from sklearn.externals import joblib


def classification_model(model, data, traindf, testdf, predictors, outcome):
    # Fit the model:
    model.fit(traindf[predictors], traindf[outcome])

    # Make predictions on training set:
    predictions = model.predict(testdf[predictors])

    predictions_train = model.predict(traindf[predictors])
    #print(model.predict(traindf[predictor_var][0]))

    # Print accuracy
    accuracy = metrics.accuracy_score(predictions, testdf[outcome])

    accuracy1 = metrics.accuracy_score(predictions_train, traindf[outcome])


    print("test Accuracy : %s" % "{0:.3%}".format(accuracy))
    print("train Accuracy : %s" % "{0:.3%}".format(accuracy1))

df=pd.read_csv("G:/final year project/Mask ventillation/Mask ventilation data and code/Connection model to html/mvalteredset.csv")

traindf, testdf = train_test_split(df, test_size = 0.3)




predictor_var = ['age','bmi','beard','mallampati','neck_radiation','ulbt','teeth','neck_circumference','macroglossia','history_of_snoring','stiff_lungs']

outcome_var='target'
model=LogisticRegression()
classification_model(model,df,traindf,testdf,predictor_var,outcome_var)

joblib.dump(model, 'mask_ventil.pkl')

#lr = joblib.load('mask_ventil.pkl')
# Saving the data columns from training
feature_cols={'age','bmi','beard','mallampati','neck_radiation','ulbt','teeth','neck_circumference','macroglossia','history_of_snoring','stiff_lungs'}
model_columns = list(feature_cols)
joblib.dump(model_columns, 'MV_model_columns.pkl')
print("Models columns dumped!")




