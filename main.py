#imports
import json
import sys

def start(file):
    #variable in which langauge strings are stored
    phpvariable = '$lang'

    #phpdata
    phpdata=''
    with open(file,'r+') as f:
        phpdata = f.read()

    #backing up
    with open(file+'.bak','w+') as f:
        f.write(phpdata)
    
    #arraydata
    arraydata={}

    #check each level of string
    for i in range(len(phpdata)):
        #syntax head '!!@'
        if phpdata[i:i+3]=='!!@':
            #declaration of Variable, Content
            content=''
            varibale=''
            #index of '!!@'
            ind1=phpdata.index('!!@')
            #triming actual phpdata based on the ind1
            temp=phpdata[ind1+3:] 
            #index of '__' after variable name
            ind2=temp.index('__')
            #saving variable name
            varibale=temp[:ind2]
            #final index of '__!!'
            ind3=temp.index('__!!')
            #saving content
            content=temp[ind2+2:ind3]
            #skipping checked index
            i=phpdata.index(temp[ind2+2:ind3])
            #replacing code with php syntax
            phpdata = phpdata.replace('!!@'+varibale+'__'+content+'__!!','<?php echo '+phpvariable+'["'+varibale+'"]; ?>')
            #saving in dict
            arraydata[varibale]=content


    #saving the phpfile
    with open(file,'w+') as f:
        f.write(phpdata)

    #dumping json
    with open(file+'.json','w+') as f:
        json.dump(arraydata,f)

if __name__=="__main__":
    start(sys.argv[1])