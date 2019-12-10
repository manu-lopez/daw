while True:
    try:
        cantidad_amigos = int(input("Cuantos amigos tienes: "))
        break
    except ValueError:
        print("No has introducido un numero!")

for cantidad in range(cantidad_amigos):
    print("Hola", input("Nombre amigo:"))
