import numpy as np

def Matriz(a):
    if len(a) > 3 or len(a) < 3:
        raise ValueError("Debes poner axb o x*z donde 'a' y 'b' son numeros y 'x' y 'z' tambien lo son")
    else:
        array1 = np.empty([int(a[0]), int(a[2])])
        for i in range (0, int(a[0])):
            for j in range(0, int(a[2])):
                print("El valor de la matriz 1 (",i,",",j,")",end="")
                array1[i][j] = int(input(": "))
    
    return array1
def Pow(a, b):
    if len()
    c = np.empty([len(a), len(b[0])])
    for i in range(0,int(matriz2[2])):
            for j in range(0, int(matriz1[0])):
                for k in range(0,int(matriz1[2])):
                    c[j][i] = c[j][i] + (a[j][k] * b[k][i])
    
    

