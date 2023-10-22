from django.shortcuts import render

# Create your views here.

def home(request):
    context = {
        'vars': 'ok'
    }
    return render(request, "footer.html", context)

def products(request):
    context = {
        'vars': 'ok'
    }
    return render(request, "products.html", context)


def about(request):
    context = {
        'vars': 'ok'
    }
    return render(request, "about.html", context)

def contact(request):
    context = {
        'vars': 'ok'
    }
    return render(request, "contact.html", context)


