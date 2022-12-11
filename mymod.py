# -*- coding: utf-8 -*-
"""
Created on Sun May 12 13:53:44 2019

@author: Hashem
"""
#import numpy as np
import pickle
import sys

x = [[]]
for i in sys.argv:
    if i == 'mymod.py':
        continue
    else:
        x[0].append(i)

def pre(x):
    #x = json.loads(jsonarr)
    unpickle = open("finalized_model.pickle","rb")
    emp = pickle.load(unpickle)
    res = emp.predict(x)
    print(int(res[0]))

pre(x)