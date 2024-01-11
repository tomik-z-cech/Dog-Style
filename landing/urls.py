from django.urls import path
from landing import views


urlpatterns = [
    path("", views.LandingPageView.as_view(), name="home"),
    path("gallery/", views.GalleryPageView.as_view(), name="gallery"),
    path("contact/", views.ContactPageView.as_view(), name="contact"),
    path("services/", views.ServicesPageView.as_view(), name="services"),
    path('zoom/', views.ZoomPageView.as_view(), name='zoom_view'),
]