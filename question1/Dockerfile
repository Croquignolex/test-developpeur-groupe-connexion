FROM mcr.microsoft.com/dotnet/aspnet:8.0 AS base

MAINTAINER "Alex NGOMBOL" <gpetitalex10@gmail.com>

WORKDIR /app
EXPOSE 8080
EXPOSE 8081

FROM mcr.microsoft.com/dotnet/sdk:8.0 AS build
ARG BUILD_CONFIGURATION=Release
WORKDIR /src
COPY ["question1.csproj", "."]
RUN dotnet restore "question1.csproj"
COPY . .
WORKDIR "/src"
RUN dotnet build "question1.csproj" -c $BUILD_CONFIGURATION -o /app/build

FROM build AS publish
ARG BUILD_CONFIGURATION=Release
RUN dotnet publish "question1.csproj" -c $BUILD_CONFIGURATION -o /app/publish /p:UseAppHost=false

FROM base AS final
WORKDIR /app
COPY --from=publish /app/publish .
ENTRYPOINT ["dotnet", "question1.dll"]