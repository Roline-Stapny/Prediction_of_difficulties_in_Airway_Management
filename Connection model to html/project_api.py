from flask import Flask, request, jsonify, render_template

from sklearn.externals import joblib
import traceback
import pandas as pd
import mysql.connector
app = Flask(__name__,template_folder='C:/xampp/htdocs/Final year')
@app.route("/datafinal", methods=["GET", "POST"])
def get_data():
    if lr and lv:
        try:
            # print("date is ", Date_of_admission)
            # doa=datetime.datetime.strptime(Date_of_admission, "%d/%m/%Y").strftime("%Y-%m-%d")

            # print("date is ", doa)
            # doa = date("Y-m-d", strtotime($Date_of_admission));
                 wardno = request.form['wardno']

            # Patient_id = session.get('Patient_id')
            # print("session date of birth is ", session.get('dob'))

                 doa = request.form['dateofa']

                 Patient_id = request.form['patient_id']
                 Patient_name=request.form['patient_name']

                 age = request.form["age"]

                 gender = request.form["gender"]
                 bmi = request.form["bmi"]
                 ig = request.form["interincisor_gap"]
                 Hnm = request.form["hnm"]
                 p = request.form["pregnant"]
                 dc = request.form["dental_condition"]
                 nt = request.form["neck_thick"]
                 afo = request.form["absence_of_mouth"]
                 sh = request.form["strider_history"]
                 fa = request.form["facial_assemetry"]
                 sm = request.form["small_mandible"]
                 td = request.form["thyromental_distance"]
                 ulbt = request.form["ulbt"]
                 nc = int(request.form["nc"])
                 nr = int(request.form["neck_radiation"])
                 mal = int(request.form["mal"])
                 teeth = request.form["teeth"]

                 beard = request.form["beard"]
                 hos = request.form["hos"]

                 macroglossia = request.form["macroglossia"]

                 stiff_lungs = request.form["stiff_lungs"]
                 str1=" "

                 if  int(afo)==1:
                     str1="absences of mouth opening"
                 elif int(sh)==1:
                     str1="strider history"
                 else:
                     if float(bmi) > 26:
                         str1 += "BMI is high\n"
                     if int(ig) < 3:
                         str1 += "internsicor gap is small \n"
                     if int(mal) == 1:
                         str1 += "mallampati score is high\n"
                     if int(td) < 6:
                         str1 += "thyromental is low\n"
                     if int(Hnm) < 80:
                         str1 += "degree of head to neck movement is minimum\n"
                     if int(ulbt) == 1 or 2:
                         str1 += "Upper lip bit test proved difficult\n"
                     if int(p) == 1:
                         str1 += "patient is pregnant\n"
                     if int(nt) == 1:
                         str1 = "neck thickness is present\n"
                     if int(fa)==1:
                         str1+="face is assymetric \n"
                     if int(sm)==1:
                         str1+="small mandible \n"
                     if int(dc)==1:
                         str1+="dental condition present"

                 strmv=" "
                 if float(bmi)>26:
                     strmv+="bmi is greater \n"
                 if int(beard)==1:
                     strmv+="beard present\n"
                 if int(mal)==1:
                     strmv+="mallampatic score is high \n"
                 if  int (nr)==1:
                     strmv+="neck radiation present \n"
                 if  int(ulbt)==1 or 2:
                     strmv+="ulbt is high\n"
                 if  int(nc)>36:
                     strmv+="neck circumference is high\n"
                 if  int(macroglossia)==1:
                     strmv+="macroglossia is present\n"
                 if  int(hos)==1:
                     strmv+="history of snoring present \n"
                 if  int(stiff_lungs)==1:
                     strmv+="stiff lungs present\n"


                 print("age ", age, "bmi ", bmi, "beard ", beard, "mal ", mal, "nr ", nr, "ulbt ", ulbt, "teeth ",
                       teeth, "nc ", nc, "macroglossia ", macroglossia, "hos ", hos, "stiff lungs ", stiff_lungs)

                 print("age ", age, "gender ", gender, "bmi", bmi, "mal ", mal, "interincisor_gap ", ig, "head_neck ", Hnm,"pregnant", p, "dental_condition ", dc, "neck_thick", nt, "absence of mouth opening", afo, "strider history ", sh, "Facial_assemtry", fa, "small_mandible", sm, "thyromental_distance", td)

                 mydb = mysql.connector.connect(
                  host="localhost",
                  user="root",
                   passwd="",
                   database="difficulties_in_airway")
                 mycursor = mydb.cursor()

                 mycursor.execute(
                "INSERT INTO `patient_parameters` (`Patient_id`, `Date_of_admission`, `Age`, `Gender`, `Beard`, `Mallampati`, `ULBT`, `BMI`, `Neck_circumference`, `Neck_radiation`, `Stiff_lungs`, `History_of_snoring`, `Teeth`, `Macroglossia`, `Interincisor_gap`,`Head_and_neck_movement`, `Pregnant`, `Neck_thick`, `Facial_Assymentry`,`Small_mandible`, `Thyromental_distance`, `Strider_history`, `Buck_teeth`,`Absence_of_mouth_opening`) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",(Patient_id, doa, age, gender, beard, mal, ulbt, bmi, nc, nr, stiff_lungs, hos, teeth, macroglossia, ig, Hnm, p, nt, fa, sm, td, sh, dc, afo))
                 mydb.commit()

                 queryIB= pd.DataFrame([[age, gender, bmi, mal, ig, Hnm, p, dc, nt, afo, sh, fa, sm, td, ulbt]])
                 print(queryIB)

                 queryMV= pd.DataFrame([[age, bmi, beard, mal, nr, ulbt, teeth, nc, macroglossia, hos, stiff_lungs]])
                 print(queryMV)


                 predictionIB = lr.predict(queryIB)

                 print(predictionIB)

                 predictionMV = lv.predict(queryMV)
                 print(predictionMV)

                 if predictionIB == 0:
                      res="Easy"
                 elif predictionIB == 1:
                      res="Difficult"
                 elif predictionIB == 2:

                    res="Impossible"
                 else:
                    res="error"

                 if predictionMV== 0:
                      res1="Easy"
                 elif predictionMV == 1:
                      res1="Difficult"
                 elif predictionMV == 2:

                     res1="Impossible"
                 else:
                     res1= "error"
                 if(gender=='1'):
                     gen="Male"
                 else:
                     gen="Female"

                 bmii=round(float(bmi),1)
                 if p=='1':
                     peg="Yes"
                 else:
                     peg="No"
                 if dc=='1':
                    den="Present"
                 else:
                     den="Absent"
                 if nt=='1':
                     neckthick="Yes"
                 else:
                     neckthick="No"
                 if afo=='0':
                     ao='Present'
                 else:
                     ao='Absent'
                 if sh=='1':
                     shi="Present"
                 else:
                     shi="Absent"
                 if fa=='1':
                     fas="Yes"
                 else:
                     fas="No"
                 if sm=='1':
                     sma="Yes"
                 else:
                     sma="No"
                 if beard=='0':
                     beard="No"
                 else:
                     beard="Yes"

                 if teeth=='0':
                      teeth="No"
                 else:
                     teeth="Yes"
                 if stiff_lungs=='1':
                     stiff_lungs="Present"
                 else:
                     stiff_lungs="Absent"
                 if hos=="1":
                     hos="Present"
                 else:
                     hos="Absent"
                 if macroglossia=='1':
                     macroglossia="Present"
                 else:
                     macroglossia="Absent"
                 if nr==1:
                     nra="Present"
                 else:
                     nra="  Absent"
                 return render_template('predictionresult_new.php',placeholder="pre",a=str(res),b=str(res1),c=str(str1),d=str(strmv),pid=str(Patient_id),pname=str(Patient_name),age=str(age),sex=str(gen),Date=str(doa),bmi=bmii,ms=str(mal),ig=str(ig),td=str(td),hnd=str(Hnm),p=str(peg),bt=str(den),nt=str(neckthick),mo=str(ao),sh=str(shi),fa=str(fas),sm=str(sma),ub=str(ulbt),be=str(beard),nrl=nra,t=str(teeth),nc=str(nc),sl=str(stiff_lungs),hs=str(hos),mg=str(macroglossia))
        except:

            return jsonify({'trace': traceback.format_exc()})
    else:
                print ('Train the model first')
                return ('No model here to use')

if __name__ == '__main__':

    port = 12346 # If you don't provide any port the port will be set to 12345

    lr = joblib.load("intubation.pkl") # Load "model.pkl"
    lv = joblib.load("mask_ventil.pkl")

    print ('Model loaded')
    model_columns = joblib.load("model_columns.pkl") # Load "model_columns.pkl"
    print ('Model columns loaded')

    app.run(port=port, debug=True)